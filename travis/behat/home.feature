Feature: Empty home page
  As a website user
  when I go to /
  I should see the text empty home page

  Scenario: Empty home page
    Given I am on "/"
    Then the response status code should be 200
    And I should see "empty home page"
