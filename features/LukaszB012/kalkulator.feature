Feature: Pole Trapezu 

  Scenario: Kalkulator (a + b)*h/2
    Given I am on homepage
    When I follow "Kalkulator by LukaszB012"
    And I fill in "A" with "5"
    And I fill in "B" with "4"
    And I fill in "H" with "2"
    And I press "Oblicz"
    Then I should see "Pole trapezu wynosi: 20"
