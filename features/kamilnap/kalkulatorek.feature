Feature: Obliczenia

  Scenario: Kalkulator (a + b)*h/2
    Given I am on homepage
    When I follow "Kalkulator by kamilnap
    And I fill in "a" with "5"
    And I fill in "b" with "15"
    And I fill in "h" with "1"
    And I press "Oblicz"
    Then I should see "Wynik wynosi 10"