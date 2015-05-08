Feature: Obliczenia

  Scenario: Kalkulator (a + b) * h / 2
    Given I am on homepage
    When I follow "Kalkulator by TomekKlyz"
    And I fill in "a" with "3"
    And I fill in "b" with "2"
    Anf I fill in "H" with "4"
    And I press "Oblicz"
    Then I should see "Wynik wynosi 10" 
