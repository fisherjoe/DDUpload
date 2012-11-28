DDUpload(拖拽并上传文件)
========
核心代码
============
//支持新一代浏览器Chrome/Safari/FF/IE10
if(typeof FormData != "undefined"){
	new UploadFileByDragDropTita({
		"target" : $("#filewrap"),//拖动生效目标元素
		"url" : "upload.php",//文件上传地址
		"fileField" : "file_upload",//文件域名，类似input[type=file]的name
		"onDragenter" : function(e){},
		"onDragleave" : function(e){},
		"onDragover" : function(e){},
		"onDrop" : function(e){},
		"requestSuccessCallback" : function(res){},//请求成功结束后回调方法
		"requestBeforeCallback" :  function(file){
			return true;
		},//请求开始前回调方法
		"requestErrorCallback" :  function(res){},//请求失败结束后回调方法
		"requestDoneCallback" : function(res){}//请求完成后回调方法
	}, window);
}