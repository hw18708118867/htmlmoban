var map = new BMap.Map("container");
//创建标注
var pt = new BMap.Point(121.41047,31.169737);
map.centerAndZoom(pt, 18);
map.addControl(new BMap.NavigationControl()); //添加工具条
loadmap();
map.enableScrollWheelZoom(); // 启用滚轮放大缩小。
function tabChange(tabid) {
	$("#ul_change_test li").removeClass("li_actives");
	if (tabid == 1) {
		$("#from").addClass("li_actives");
		$(".qh_cont").css("display", "none");
		$("#qh_cont_1").css("display", "block");
	}
	if (tabid == 2) {
		$("#to").addClass("li_actives");
		$(".qh_cont").css("display", "none");
		$("#qh_cont_2").css("display", "block");
	}
	if (tabid == 3) {
		$("#nearby").addClass("li_actives");
		$(".qh_cont").css("display", "none");
		$("#qh_cont_3").css("display", "block");
	}
}

//周边
function nearbySearch(name) {
	loadmap();
	var local = new BMap.LocalSearch(map, {
		renderOptions: { map: map, autoViewport: true }
	});
	local.searchInBounds(name, map.getBounds());
}
function trans(ts, type) {
	//loadmap();
			var TransitFun = function (result){   
					if (transit.getStatus() == BMAP_STATUS_SUCCESS){
						// 从结果对象中获取起点和终点信息
						var start = result.getStart().title;
						var end = result.getEnd().title;

						// 直接获取第一个方案
						var plan = result.getPlan(0);
						// 获取步行线路与公交线路个数总和，用于遍历
						var total = plan.getNumRoutes() + plan.getNumLines();

						var description = ['从' + start];
						var addEndTitle = true;
						for (var i = 0; i < total; i++) {
								if (i % 2 == 0) {
										// i为偶数
										// 处理第一个步行描述逻辑
										if (i / 2 == 0) {
												if (plan.getRoute(i / 2).getDistance(false) == 0) {
														description = ['从'];
												}
										}
										// 处理最后一个步行描述逻辑
										if (i / 2 == plan.getNumRoutes() - 1) {
												if (plan.getRoute(i / 2).getDistance(false) == 0) {
														addEndTitle = false;
												}
										}
										if (plan.getRoute(i / 2).getDistance(false) > 0) {
												description.push('步行约' + plan.getRoute(i / 2).getDistance(true) + '至');
										}
								} else {
										// i为奇数
										var line = plan.getLine((i - 1) / 2);
										if (i == 0) {
												description.push(line.getGetOnStop().title + ', ');
										}
										if (i > 0) {
												if (plan.getRoute((i - 1) / 2).getDistance(false) > 0) {
														description.push(line.getGetOnStop().title + ', ');
												}
										}
										description.push('乘坐' + line.title + ', ');
										description.push('经过' + line.getNumViaStops() + '站');
										description.push('在' + line.getGetOffStop().title + '站下车，');

										var myLabel = new BMap.Label('乘坐' + line.title.split("(")[0] + ', 在' + line.getGetOffStop().title + '站下车', {offset: new BMap.Size(-50,-50), position: line.getGetOnStop().point});
										map.addOverlay(myLabel);
								}
						}
						if (addEndTitle) {
								description.push(end + '。');
						}
						// 替换可能出现的末尾位置的逗号
						var descriptionStr = description.join('').replace(/\uff0c$/, '。');
					}
			}
			var DrivingFun = function (results){   
				if (driving.getStatus() == BMAP_STATUS_SUCCESS) {
		var start = results.getStart();
					var end = results.getEnd();

					var myLabel = new BMap.Label(start.title, {offset: new BMap.Size(-50,-50), position: start.point});
					map.addOverlay(myLabel);

					var viewPoints = [start.point, end.point];
					// 获取方案
					var plan = results.getPlan(0);
					// 获取方案中包含的路线
					for (var i =0; i < plan.getNumRoutes(); i++) {
						for (var ii =1; ii < plan.getRoute(i).getNumSteps(); ii++) {
							if (plan.getRoute(i).getStep(ii-1).getDistance(false) > 1000) {
								var myLabel = new BMap.Label(plan.getRoute(i).getStep(ii).getDescription(false), {offset: new BMap.Size(-50,-50), position: plan.getRoute(i).getStep(ii).getPosition()});
								map.addOverlay(myLabel);
							}
						}
					}
				}
			}

	if (ts == 0) {
		if ($("#trafficFrom").val() != "") {
			if (type == 0) {
				//公交
				var transit = new BMap.TransitRoute(map, {
										renderOptions: { map: map },//, panel: 'panel'
										policy: BMAP_TRANSIT_POLICY_LEAST_TRANSFER,
										onSearchComplete: TransitFun
				});
				transit.search($("#trafficFrom").val(), { title: '安御文化传媒', point: pt });
			}
			else {
				//驾车
				var driving = new BMap.DrivingRoute(map, {
										renderOptions: { map: map, autoViewport: true, enableDragging: true},
										policy: BMAP_DRIVING_POLICY_LEAST_DISTANCE,
										onSearchComplete: DrivingFun
									});
				driving.search($("#trafficFrom").val(), { title: '安御文化传媒', point: pt });
			}
		}
		else {
			alert("起点不能为空！");
			return false;
		}
	}
	else {
		if ($("#trafficTo").val() != "") {
			if (type == 0) {
				//公交
				var transit = new BMap.TransitRoute(map, {
										renderOptions: { map: map },//, panel: 'panel'
										policy: BMAP_TRANSIT_POLICY_LEAST_TRANSFER,
										onSearchComplete: TransitFun
				});
				transit.search({ title: '安御文化传媒', point: pt }, $("#trafficTo").val());
			}
			else {
				//驾车
				var driving = new BMap.DrivingRoute(map, {
										renderOptions: { map: map, autoViewport: true, enableDragging: true},
										policy: BMAP_DRIVING_POLICY_LEAST_DISTANCE,
										onSearchComplete: DrivingFun
									});
				driving.search({ title: '安御文化传媒', point: pt }, $("#trafficTo").val());
			}
		}
		else {
			alert("终点不能为空！");
			return false;
		}
	}
}
function loadmap() {
	map.clearOverlays();
	var myIcon = new BMap.Icon("../images/map_tip.png", new BMap.Size(350,440));
	var marker = new BMap.Marker(pt, { icon: myIcon });  // 创建标注
	map.addOverlay(marker);
	var data = '';
	//var infoWindow = new BMap.InfoWindow(data);
	//marker.addEventListener("click", function () { this.openInfoWindow(infoWindow); });
	//map.openInfoWindow(infoWindow, map.getCenter()); // 打开信息窗口
}