node {
    stage('cleanup') {
    // Recursively delete all files and folders in the workspace
    // using the built-in pipeline command
    deleteDir()
    }
    stage('preparation') {
        // Checkout the master branch of the Laravel framework repository
        git branch: 'master', url: 'https://github.com/obgithub/myjenkins.git'
    }
    stage("composer_install") {
        // Run `composer update` as a shell script
        sh 'composer install'
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
