<?php

class DotEnvHook
{
    public function LoadEnvironment()
    {
        $dotenv = Dotenv\Dotenv::createImmutable(FCPATH . '..');
        $dotenv->safeLoad();
        $dotenv->required(['DATABASE_HOSTNAME','DATABASE_NAME','DATABASE_USERNAME','DATABASE_PASSWORD'])
        ->notEmpty();
        
    }
}
