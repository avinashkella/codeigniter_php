// users.test.js
const Network = require('./network');
const Users = require('./usertest');

jest.mock('./network');

test('should fetch get users', () => {
  const users = [{ name: 'Bob' }];
  const resp = { data: users };
  Network.get.mockResolvedValue(resp);

  // or you could use the following depending on your use case:
  // axios.get.mockImplementation(() => Promise.resolve(resp))

  return Users.all().then(data => expect(data).toEqual(users));
});


test('should fetch Post users', () => {
  const users = [{ name: 'Bob' }];
  const resp = { data: users };
  Network.post.mockResolvedValue(resp);

  // or you could use the following depending on your use case:
  // axios.get.mockImplementation(() => Promise.resolve(resp))

  return Users.allpost().then(data => expect(data).toEqual(users));
});
/*
* Network_Interface: get, post
* Network implement Network_Interface -----> get, post
* MockNetwork implement Network_Interface -----> get, post
*
* */
/*
*
*
*
*
*
* */

