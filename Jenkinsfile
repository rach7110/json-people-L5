pipeline {
  agent any
  stages {
    stage('Build') {
      steps {
        sh 'composer install'
      }
    }
    stage('Deploy') {
      steps {
        echo 'WE ARE DEPLOYING'
        sh 'docker-composer up -d'
        input 'Look good? Shall we deploy?'
      }
    }
  }
}