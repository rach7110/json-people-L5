pipeline {
  agent any
  stages {
    stage('Build') {
      steps {
        sh 'export PATH=$PATH:/usr/bin/docker'
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