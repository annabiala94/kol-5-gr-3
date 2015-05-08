Feature: Pole trapezu

  Scenario: Kalkulator pola trapezu
    Given I am on homepage
    When I follow "Pole trapezu by Konradha9"
    And I fill in "a" with "5"
    And I fill in "b" with "5"
    And I fill in "h" with "7"
    And I press "Oblicz"
    Then I should see "Wynik wynosi 35"