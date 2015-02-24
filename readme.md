# Realm Digital - Developer Program & Web Developer Evaluation
* Each answer is namespaced under <code>Mnel\Realmdigital\\{question_number}</code>
* Each class to every answer is can be located under the <code>src</code> dir
* Answers to questions are tested using phpspec (located under the <code>spec</code> directory).

## Developer Program
1. Write a function that replaces characters in a string, without using language function “string replace”
2. Write a function that checks if a given sentence is a palindrome. A palindrome is a word, phrase, verse, or sentence that reads the same backward or forward. Only the order of English alphabet letters (A-Z and a-z) should be considered, other characters should be ignored.
    * "abccba" = true
    * "a man, a plan, a canal, panama" = true
    * "aabbcc" = false
    * "a quick brown fox" = false
3. Write a function that takes 2 integer arrays, and returns an array containing the duplicate values [1, 2, 3, 4, 5, 6] & [4, 5, 6, 7, 8, 9] should return [4, 5, 6]
4. Write a function that takes an integer array, and returns an array containing the values that occur once, eg [1, 2, 3, 3, 5, 1,7, 2] should return [5, 7]
5. Write a function that takes an integer array, sorts it in ascending order, without using language function “array sort” - eg [4, 6, 1, 3, 2, 5] should return [1, 2, 3, 4, 5, 6]

## Web Developer Evaluation
### Part 1: HTML and CSS
Build a Traffic Light. Produce a traffic light or robot. It should have 3 vertical lights showing the colours of the traffic light. Please include a small and large traffic light in 1 single HTML page. Both traffic lights should be identical
except for size.

Copy the code and place in the folder called "HTMLCSS" (<code>Mnel\Realmdigital\WebDeveloperEvaluation\HTMLCSS</code>).

### Part 2: JavaScript
Build an Interactive Traffic Light. Using any JS means possible including a framework of your choice, update the html for part 1 to perform
the following:
1. Hovering over the traffic light should show its colour.
2. Clicking on the traffic light should turn the colour on or off.

Copy the code and place in the folder called "JavaScript". (<code>Mnel\Realmdigital\WebDeveloperEvaluation\JavaScript</code>).

### Part 3: Software Design
Design a Phone book application. 

**Requirements:** You are required to capture and manage your friends and phone numbers.

**Architecture:** Application is web based and all data is stored in a database.

**Considerations:** All databases access is not for consideration. All data is read from the database magically.
All UI interaction is not for consideration.

**Deliverables:**
In any way you feel best provide the classes, objects etc that you would use to achieve this.
The full database structure required to achieve.
We are not expecting to see code to implement the application.

Please retain all materials include paper for review.

## Tests
![Build Status](https://travis-ci.org/m-nel/realmdigital.svg?branch=master)

### How to run tests
First install dependencies (phpspec): ``` composer install ```

Then run: ``` ./vendor/bin/phpspec run -vvv```
