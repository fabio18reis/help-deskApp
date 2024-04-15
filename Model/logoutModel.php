<?php

class LogoutModel {
    public function sessionDestroyer(){
        session_start();
        session_destroy();
    }
}