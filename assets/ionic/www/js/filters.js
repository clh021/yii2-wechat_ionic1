angular.module('starter')
.filter('totalOfMenus', totalOfMenus);
function totalOfMenus() {
  return function(data){
    if(typeof(data) === undefined) {
      return 0;
    }
    var sum = 0;
    for (i in data) {
      for (j in data[i]['menudata']) {
        for (k in data[i]['menudata'][j]['children']) {
          sum += parseInt(data[i]['menudata'][j]['children'][k]['price'] * data[i]['menudata'][j]['children'][k]['copy']);
        }
      }
    }
    return sum;
  };
}