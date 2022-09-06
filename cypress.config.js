const { defineConfig } = require("cypress");
require("dotenv").config();

module.exports = defineConfig({
  watchForFileChanges: false,

  retries: {
    runMode: 2,
    openMode: 0,
  },

  e2e: {
    setupNodeEvents(on, config) {
    },
    supportFile: "cypress/support/commands.js",
    baseUrl: process.env.URL,
  },

  defaultCommandTimeout: 60000,
  pageLoadTimeout: 60000,
  responseTimeout: 40000,
  requestTimeout: 40000,
  projectID: process.env.CYPRESS_PROJECT_ID,
  env: {},
});
