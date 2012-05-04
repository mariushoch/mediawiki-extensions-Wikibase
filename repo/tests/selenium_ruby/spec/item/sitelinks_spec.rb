require 'spec_helper'

describe "Check functionality of add/edit/remove sitelinks" do

  context "Check for empty site links UI" do
    it "should check that there are no site links and if there's an add button" do
      visit_page(SitelinksItemPage)
      @current_page.sitelinksTable?.should be_true
      @current_page.addSitelinkLink?.should be_true
      @current_page.siteLinkCounter?.should be_true

      numExistingSitelinks = @current_page.countExistingSitelinks
      numExistingSitelinks.should == 0
      numExistingSitelinks.should == @current_page.getNumberOfSitelinksFromCounter

      @current_page.addSitelinkLink
      @current_page.siteIdInputField.should be_true
      @current_page.pageInputField.should be_true
      @current_page.sitelinksSaveLinkDisabled.should be_true
      @current_page.cancelSitelinkLink?.should be_true
      @current_page.cancelSitelinkLink

      visit_page(SitelinksItemPage)
      @current_page.countExistingSitelinks.should == 0
    end
  end

  context "Check for adding site link UI" do
    it "should check if adding a sitelink works" do
      visit_page(SitelinksItemPage)
      @current_page.countExistingSitelinks.should == 0
      @current_page.addSitelinkLink
      @current_page.siteIdInputField_element.enabled?.should be_true
      @current_page.pageInputField_element.enabled?.should be_false
      @current_page.siteIdInputField = "e"
      ajax_wait

      # TODO: find solution: key has to be sent to input field first to get the autocomplete list visible to selenium
      @current_page.siteIdInputField_element.send_keys :arrow_down
      @current_page.siteIdAutocompleteList_element.visible?.should be_true

      # num_of_site_id_elements = @current_page.countAutocompleteListElements(@current_page.siteIdAutocompleteList_element)
      # num_of_site_id_elements.should > 0
      @current_page.getNthElementInAutocompleteList(@current_page.siteIdAutocompleteList_element, 1).click

      @current_page.siteIdAutocompleteList_element.visible?.should be_false
      @current_page.pageInputField_element.enabled?.should be_true
      @current_page.pageInputField = "Ber"
      ajax_wait

      # TODO: find solution: key has to be sent to input field first to get the autocomplete list visible to selenium
      @current_page.pageInputField_element.send_keys :arrow_down
      @current_page.pageAutocompleteList_element.visible?.should be_true

      # num_of_site_id_elements = @current_page.countAutocompleteListElements(@current_page.pageAutocompleteList_element)
      # num_of_site_id_elements.should > 0
      @current_page.getNthElementInAutocompleteList(@current_page.pageAutocompleteList_element, 1).click

      @current_page.pageAutocompleteList_element.visible?.should be_false

      @current_page.cancelSitelinkLink?.should be_true
      @current_page.saveSitelinkLink?.should be_true
      @current_page.saveSitelinkLink
      ajax_wait
      visit_page(SitelinksItemPage)

      numExistingSitelinks = @current_page.countExistingSitelinks
      numExistingSitelinks.should == 1
    end
  end

  context "Check for adding multiple site link UI" do
    it "should check if adding multiple sitelink works" do
      count = 1
      sitelinks = [["de", "Ber"], ["ja", "Ber"], ["he", "Ber"]]
      visit_page(SitelinksItemPage)
      sitelinks.each do |sitelink|
        # visit_page(SitelinksItemPage)
        @current_page.countExistingSitelinks.should == count
        @current_page.addSitelinkLink
        @current_page.siteIdInputField = sitelink[0]
        ajax_wait
        @current_page.siteIdInputField_element.send_keys :arrow_down
        @current_page.siteIdAutocompleteList_element.visible?.should be_true
        @current_page.getNthElementInAutocompleteList(@current_page.siteIdAutocompleteList_element, 1).click

        @current_page.siteIdAutocompleteList_element.visible?.should be_false
        @current_page.pageInputField_element.enabled?.should be_true
        @current_page.pageInputField = sitelink[1]
        ajax_wait
        @current_page.pageInputField_element.send_keys :arrow_down
        @current_page.pageAutocompleteList_element.visible?.should be_true

        @current_page.getNthElementInAutocompleteList(@current_page.pageAutocompleteList_element, 1).click
        @current_page.pageAutocompleteList_element.visible?.should be_false
        @current_page.saveSitelinkLink?.should be_true
        @current_page.saveSitelinkLink
        ajax_wait
        count = count+1
        if count!=1
          @current_page.getNumberOfSitelinksFromCounter.should == count
        end 
      end
      @current_page.countExistingSitelinks.should == count
      
    end
  end

end

