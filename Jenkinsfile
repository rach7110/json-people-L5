pipeline {
  agent any
  stages {
    stage('Build') {
      steps {
        sh 'export PATH=$PATH:/usr/bin/docker'
        sh 'docker-compose up -d'
        sh 'sudo curl -L "https://github.com/docker/compose/releases/download/1.22.0/docker-compose-$(uname -s)-$(uname -m)" -o /usr/local/bin/docker-compose'
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