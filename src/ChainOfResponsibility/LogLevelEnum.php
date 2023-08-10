<?php

namespace App\ChainOfResponsibility;

enum LogLevelEnum: int {
    case INFO = 1;
    case ERROR = 2;
    case DEBUG = 3;
}