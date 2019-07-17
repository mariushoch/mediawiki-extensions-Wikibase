import SpecialPageEntityRepository from '@/data-access/SpecialPageEntityRepository';
import EntityNotFound from '@/data-access/error/EntityNotFound';
import TechnicalProblem from '@/data-access/error/TechnicalProblem';
import JQueryTechnicalError from '@/data-access/error/JQueryTechnicalError';

function jQueryGetMock( successObject: null | unknown, rejectData?: unknown ): JQueryStatic {
	const jQueryMock = {
		get: () => {
			if ( successObject !== null ) {
				return Promise.resolve( successObject );
			}
			return Promise.reject( rejectData );
		},
	};

	return ( jQueryMock as unknown ) as JQueryStatic;
}

describe( 'SpecialPageEntityRepository', () => {
	it( 'returns well formatted answer as expected', async () => {
		const jQueryMock = jQueryGetMock( {
			'entities': {
				'Q123': {
					'pageid': 214,
					'ns': 120,
					'title': 'Item:Q123',
					'lastrevid': 2183,
					'modified': '2019-07-09T09:08:46Z',
					'type': 'item',
					'id': 'Q123',
					'labels': { 'en': { 'language': 'en', 'value': 'Wikidata bridge test item' } },
					'descriptions': [],
					'aliases': [],
					'claims': {
						'P20': [ {
							'mainsnak': {
								'snaktype': 'value',
								'property': 'P20',
								'datavalue': {
									'value': 'String for Wikidata bridge',
									'type': 'string',
								},
								'datatype': 'string',
							},
							'type': 'statement',
							'id': 'Q123$36ae6854-4e74-d74c-d583-701bc130166f',
							'rank': 'normal',
						} ],
					},
					'sitelinks': [],
				},
			},
		} );

		jest.spyOn( jQueryMock, 'get' );

		const entityDataSupplier = new SpecialPageEntityRepository( jQueryMock, 'index.php?title=Special:EntityData/' );

		const actualResultData = await entityDataSupplier.getEntity( 'Q123' );

		const expectedData = {
			entity: {
				'id': 'Q123',
				'statements': {
					'P20': [ {
						'id': 'Q123$36ae6854-4e74-d74c-d583-701bc130166f',
						'mainsnak': {
							'datatype': 'string',
							'datavalue': { 'type': 'string', 'value': 'String for Wikidata bridge' },
							'property': 'P20',
							'snaktype': 'value',
						},
						'rank': 'normal',
						'type': 'statement',
					} ],
				},
			},
			revisionId: 2183,
		};

		expect( jQueryMock.get ).toBeCalledTimes( 1 );
		expect( jQueryMock.get ).toBeCalledWith( 'index.php?title=Special:EntityData/Q123.json' );
		expect( actualResultData ).toEqual( expectedData );
	} );

	describe( 'if there is a problem', () => {
		it( 'rejects on result that does not contain an object', ( done ) => {
			const jQueryMock = jQueryGetMock( '<some><random><html>' );

			const entityDataSupplier = new SpecialPageEntityRepository( jQueryMock, 'testurl' );
			entityDataSupplier.getEntity( 'Q123' ).catch( ( reason ) => {
				expect( reason ).toBeInstanceOf( TechnicalProblem );
				expect( reason.message ).toBe( 'Result not well formed.' );
				done();
			} );
		} );

		it( 'rejects on result missing entities key', ( done ) => {
			const jQueryMock = jQueryGetMock( {} );

			const entityDataSupplier = new SpecialPageEntityRepository( jQueryMock, 'testurl' );
			entityDataSupplier.getEntity( 'Q123' ).catch( ( reason ) => {
				expect( reason ).toBeInstanceOf( TechnicalProblem );
				expect( reason.message ).toBe( 'Result not well formed.' );
				done();
			} );
		} );

		it( 'rejects on result missing relevant entity in entities', ( done ) => {
			const jQueryMock = jQueryGetMock( {
				entities: {
					'Q4': {},
				},
			} );

			const entityDataSupplier = new SpecialPageEntityRepository( jQueryMock, 'testurl' );
			entityDataSupplier.getEntity( 'Q123' ).catch( ( reason ) => {
				expect( reason ).toBeInstanceOf( EntityNotFound );
				expect( reason.message ).toBe( 'Result does not contain relevant entity.' );
				done();
			} );
		} );

		it( 'rejects on result indicating relevant entity as missing', ( done ) => {
			const jQueryMock = jQueryGetMock( null, { status: 404 } );

			const entityDataSupplier = new SpecialPageEntityRepository( jQueryMock, 'testurl' );
			entityDataSupplier.getEntity( 'Q123' ).catch( ( reason ) => {
				expect( reason ).toBeInstanceOf( EntityNotFound );
				expect( reason.message ).toBe( 'Entity flagged missing in response.' );
				done();
			} );
		} );

		it( 'rejects if there was a serverside problem with the API', ( done ) => {
			const jQueryMock = jQueryGetMock( null, { status: 500 } );

			const entityDataSupplier = new SpecialPageEntityRepository( jQueryMock, 'testurl' );
			entityDataSupplier.getEntity( 'Q123' ).catch( ( reason ) => {
				expect( reason ).toBeInstanceOf( JQueryTechnicalError );
				expect( reason.message ).toBe( 'request error' );
				done();
			} );
		} );
	} );
} );