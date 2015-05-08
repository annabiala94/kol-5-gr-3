Feature: Obliczenia

  Scenario: Trapez
    Given I am on homepage
    When I follow "Trapez by annabiala94"
    And I fill in "a" with "1"
    And I fill in "b" with "3"
    And I fill in "h" with "2"
    And I press "Oblicz"
    Then I should see "Wynik wynosi 4"