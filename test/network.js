class Network {
  static get(url) {
    return { data: `some data from GET ${url}` };
  }

  static post(url) {
    return { data: `some data from POST ${url}` };
  }
}

module.exports = Network;
