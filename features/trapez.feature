Feature: Obliczenia

  Scenario: Trapez a + b * h / 2
    Given I am on homepage
    When I follow "Trapez by barteko2"
    And I fill in "a" with "5"
    And I fill in "b" with "7"
    And I fill in "h" with "2"
    And I press "Oblicz"
    Then I should see "Wynik wynosi 12"