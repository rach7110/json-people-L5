pipeline {
  agent {
    docker {
      args '-p 8000:8000'
      image 'epcallan/php7-testing-phpunit'
    }

  }
  stages {
    stage('Build') {
      steps {
        sh 'composer install'
      }
    }
  }
}