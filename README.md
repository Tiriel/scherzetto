[![Build Status](https://travis-ci.org/Tiriel/MyBlog.svg?branch=master)](https://travis-ci.org/Tiriel/MyBlog) [![CircleCI](https://circleci.com/gh/Tiriel/MyBlog.svg?style=shield)](https://circleci.com/gh/Tiriel/MyBlog) [![Codacy Badge](https://api.codacy.com/project/badge/Grade/c62b62594b0648e8b8ff675535f35fc6)](https://www.codacy.com/app/Scherzetto/scherzetto?utm_source=github.com&amp;utm_medium=referral&amp;utm_content=scherzetto/scherzetto&amp;utm_campaign=Badge_Grade) [![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/Tiriel/MyBlog/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/Tiriel/MyBlog/?branch=master) [![Codacy Badge](https://api.codacy.com/project/badge/Coverage/c62b62594b0648e8b8ff675535f35fc6)](https://www.codacy.com/app/Scherzetto/scherzetto?utm_source=github.com&utm_medium=referral&utm_content=scherzetto/scherzetto&utm_campaign=Badge_Coverage)
# MyBlog
My personnal Blog. Compliant with OpenClassrooms' fifth project on the PHP/Symfony Applications Developer path.

## About this project

This project aims to give an example of what's possible for the fifth project of OpenClassrooms' PHP/Symfony Applications Developer path.
It is not meant to be perfect, or to rewrite an entire framework. It is highly opinionated, and although its architecture is designed to be as generic as possible, it's clearly oriented toward blogs and websites creation. **It is not meant to be used to create APIs** although a future fork might take this path.

# Installation
1. Clone the repository and `cd` into it
2. Run `composer install`
3. Develop your own controllers and logic inside the `src/App/` directory

## Features
* Compliant with the project sheet
* Compliant with PSRs 1, 2, 4 and 7
* Largely inspired by Symfony
* Extensible, inside the boudaries of 'HTML rendering websites' category
* Uses Yaml format for configuration, although it could also use JSON

## Dependencies
* Twig/Twig
* Guzzle/PSR7
* Symfony/YAML 

#### Dev dependencies
* PHPUnit/PHPUnit
* Codacy/Coverage
* PHPStan/PHPStan
