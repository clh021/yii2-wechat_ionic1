angular.module('starter.controllers', [])
    .controller('OrderCtrl', function ($scope, $http, $ionicPopup, $state, $ionicScrollDelegate) {
        //$ionicPopup.alert({title: '测试中',template: '当前版本02191257',});

        response={data:''};
        response.data={"red":["1\u3001\u63d0\u4ea4\u8ba2\u5355","2\u3001\u4e0b\u5355\u6210\u529f"],"status":["3\u3001\u5546\u54c1\u51fa\u5e93","4\u3001\u5230\u8fbe\u53d6\u8d27\u70b9","5\u3001\u5b8c\u6210"],"time":"2016-02-23 12:00:00","name":"\u9648\u826f\u5b8f","mobile":"18086056468","address":"\u6df1\u5733\u5e02\u798f\u7530\u533a\u4e0b\u6c99\u56fe\u4e66\u9986","qrimg":"http:\/\/wx.womenxing.com\/qrcode\/index.php?url=http:\/\/wx.womenxing.com\/guifeishan_fcdmn.php\/5\/\u5546\u54c1\u51fa\u5e93","addrimg":"img\/addr2.jpg"};
        $scope.msg = response.data;
		$ionicPopup.alert({title: '温馨提示',template: "请您在"  + response.data.time + "取餐",});

        // $http.get("/guifeishan/api/order.php").then(function(response) {
        //         if(response.data.status){
        //     		$scope.msg = response.data;
        //         	$ionicPopup.alert({title: '温馨提示',template: "请您在"  + response.data.time + "取餐",});
        //         } else {
        //             $ionicPopup.alert({
        //                 title: '啊哦',
        //                 template: '您还没有下单过，请先下单',
        //             });
        //             $state.go('tab.main');
        //         }
        // });
        $ionicScrollDelegate.$getByHandle("mainScrollOrder").resize();
    })
    .controller('MyCtrl', function ($scope, $http) {

    	response={data:''};
    	response.data={"name":"\u9648\u826f\u5b8f","avatar":"http:\/\/wx.qlogo.cn\/mmopen\/FB5O5rWz1lCr5PAibcyZ3PTzxo5Yx3hkfVcjriavEFmlkYbZ25n0N0YTzG7z9SLGbOuMiaDHNr0Ovib5yTJW27jcGxlFmN3pEGTM\/0","name2":"\u9648\u826f\u5b8f","mobile":"18086056468","address":"\u6df1\u5733\u5e02\u798f\u7530\u533a\u4e0b\u6c99\u56fe\u4e66\u9986"};
    	$scope.r=response.data;

        // $http.get("/guifeishan/api/my.php").then(function(response) {
        // 	$scope.r = response.data;
        // });
    })
    .controller('MainNextCtrl', function ($scope, Foods, $http, $filter, $ionicPopup, $state, $ionicScrollDelegate) {
        $scope.foodmenus = Foods.cleardata();
        $scope.selected= {time: '',addr:''};

        response={data:''};
        response.data={"time":"02\u670827\u65e5","name":"\u9648\u826f\u5b8f","mobile":"18086056468","address":"\u6df1\u5733\u5e02\u798f\u7530\u533a\u4e0b\u6c99\u56fe\u4e66\u9986","timeItems":["02\u670827\u65e5","02\u670828\u65e5"],"addrItems":["\u6df1\u5733\u5e02\u5357\u5c71\u533a\u9ad8\u65b0\u5357\u4e09\u9053\u4e2d\u79d1\u5927\u53a6","\u6df1\u5733\u5e02\u798f\u7530\u533a\u4e0b\u6c99\u56fe\u4e66\u9986"]};
        $scope.name = response.data.name;
        $scope.mobile = response.data.mobile;
        $scope.selected.time = response.data.time;
        $scope.selected.addr = response.data.address;
        $scope.addrItems = response.data.addrItems;
        $scope.timeItems = response.data.timeItems;

        // $http.get("/guifeishan/api/addr.php").then(function(response){
        //     $scope.name = response.data.name;
        //     $scope.mobile = response.data.mobile;
        //     $scope.selected.time = response.data.time;
        //     $scope.selected.addr = response.data.address;
        //     $scope.addrItems = response.data.addrItems;
        //     $scope.timeItems = response.data.timeItems;
        // });

        $scope.gophp = function(){
            menusok=Foods.menuok($scope.foodmenus).cleardata();
            data={
                time:document.getElementById('time').value,
                name:document.getElementById('name').value,
                mobile:document.getElementById('mobile').value,
                address:document.getElementById('address').value,
                menusok:menusok,
                total:$filter('totalOfMenus')(menusok),
            };
            $ionicPopup.alert({
                title: '恭喜！',
                template: '下单成功！',
            });
            $state.go('tab.order');
            // $http.post("/guifeishan/api/addr.php",data).success(function(response){
            //     if(response.status){
            //         $ionicPopup.alert({
            //             title: '恭喜！',
            //             template: '下单成功！',
            //         });
            //         $state.go('tab.order');
            //     } else {
            //         message = response.message ? response.message : '服务器繁忙，请稍后再试';
            //         $ionicPopup.alert({
            //             title: '下单失败',
            //             template: message,
            //         });
            //     }
            // });
        };
        $ionicScrollDelegate.$getByHandle("mainScrollNext").resize();
    })
    .controller('MainCtrl', function ($scope, Foods, $ionicScrollDelegate) {
        $scope.foodmenus = Foods.all();
        $ionicScrollDelegate.$getByHandle("mainScroll").resize();
    })
    .controller('MainDetailCtrl', function ($scope, $stateParams, Chats, $ionicScrollDelegate) {
        $scope.chat = Chats.get($stateParams.id);
        $ionicScrollDelegate.$getByHandle("mainScrollDetail").resize();
    })