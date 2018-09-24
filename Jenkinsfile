pipeline {
  agent any
  stages {
    stage('Build') {
      steps {
        sh 'which docker'
        sh 'echo $PATH'
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