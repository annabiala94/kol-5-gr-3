Feature: Obliczenia

  Scenario: Pole trapezu (a + b)*h/2
    Given I am on homepage
    When I follow "Pole trapezu by golabm1993"
    And I fill in "a" with "5"
    And I fill in "b" with "7"
    And I fill in "h" with "2"
    And I press "Oblicz"
    Then I should see "Wynik wynosi 12"