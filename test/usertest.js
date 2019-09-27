// users.js
const Network = require('./network');

class Users {
  static all() {
    return Network.get('/users.json').then(resp => resp.data);
  }

  static allpost() {
    return Network.post('/users.json').then(resp => resp.data);
  }
}

module.exports = Users;
