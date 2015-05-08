Feature: Obliczenia

  Scenario: pole trapezu
    Given I am on homepage
    When I follow "Pole trapezu by michalli"
    And I fill in "a" with "4"
    And I fill in "b" with "7"
    And I fill in "h" with "6"
    And I press "Oblicz"
    Then I should see "Wynik wynosi 33"