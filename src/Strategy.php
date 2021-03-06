<?php

namespace BeedooEdtech\Passport\Strategy;

interface Strategy
{
    public function redirect();
    public function getId();
    public function getName();
    public function getFirstName();
    public function getLastName();
    public function getEmail();
    public function getAvatar();
}