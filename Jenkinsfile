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
        sh 'sh \'chmod -R 755 ./vendor\''
      }
    }
    stage('Test') {
      environment {
        APP_ENV = 'local'
      }
      steps {
        sh 'sh \'./vendor/bin/phpunit\''
      }
    }
  }
}