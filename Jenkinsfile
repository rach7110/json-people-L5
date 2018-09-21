pipeline {
  agent {
    docker {
      args '-p 8000:8000'
      image 'epcallan/php7-testing-phpunit:7.1-phpunit5'
    }

  }
  stages {
    stage('Build') {
      steps {
        sh 'composer install'
      }
    }
    stage('Test') {
      environment {
        APP_ENV = 'local'
      }
      steps {
        sh 'sh "php ./vendor/bin/phpunit"'
      }
    }
  }
}