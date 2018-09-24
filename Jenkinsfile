pipeline {
  agent any
  stages {
    stage('Build') {
      steps {
        sh 'composer install'
        sh 'docker-composer up -d'
      }
    }
    stage('Deploy') {
      steps {
        echo 'WE ARE DEPLOYING'
        input 'Look good? Shall we deploy?'
      }
    }
  }
}