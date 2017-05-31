node {
    stage('cleanup') {
    // Recursively delete all files and folders in the workspace
    // using the built-in pipeline command
    deleteDir()
    }
    stage("composer_install") {
        // Run `composer update` as a shell script
        sh '/usr/local/bin/composer install'
    }
    stage("phpunit") {
        // Run PHPUnit
        sh '/usr/local/bin/phpunit'
    }
    stage("codecept") {
        // Run PHPUnit
        sh 'codecept run --steps'
    }
}
