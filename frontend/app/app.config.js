'use strict';

angular.
  module('phonecatApp').
  config(['$stateProvider', '$urlRouterProvider',
    function config($stateProvider, $urlRouterProvider) {
      $stateProvider.
      state('phones', {
        url:"/phones",
        template: '<phone-list></phone-list>'
      }).
      state('details', {
        url:"/phone/:phoneId",
        template: '<phone-detail></phone-detail>'
      });
      $urlRouterProvider.otherwise('/phones');
    }
    ]);