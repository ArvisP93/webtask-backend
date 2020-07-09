<?php

require_once("products/controller/Controller.php");

require_once("products/model/Product.php");

require_once("products/repository/InMemoryRepository.php");
require_once("products/repository/ProductRepository.php");

require_once("response/Response.php");
require_once("response/ResponseJson.php");
require_once("response/ResponseXml.php");

require_once("validation/Validator.php");
require_once("validation/NumberValidator.php");
require_once("validation/CountValidator.php");
require_once ("validation/ErrorMessage.php");

require_once("users/controller/Controller.php");

require_once("users/model/User.php");

require_once("users/repository/InMemoryRepository.php");
require_once("users/repository/UserRepository.php");