<?php

require 'vendor/autoload.php';
// require 'src/Colleption/BaseException.php';
// require 'src/Colleption/HttpException/HttpException.php';
// require 'src/Colleption/HttpException/ForbiddenException.php';

try {
    // throw new \Colleption\BaseException();
    new \Colleption\HttpException\BadRequestException();
    new \Colleption\HttpException\ForbiddenException();
    // new \Colleption\HttpException\HttpException();
    new \Colleption\HttpException\InternalServerErrorException();
    new \Colleption\HttpException\NotFoundException();
    new \Colleption\HttpException\UnauthorizedException();
} catch (Exception $e) {
    echo $e->getMessage();
}