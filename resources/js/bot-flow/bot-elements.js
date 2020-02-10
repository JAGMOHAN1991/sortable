import * as flowApi from './bot-flow-api'
// setFlowSidebar();
export const setFlowSidebar =  flowData => {
	// console.log('data',flowData);
	var sideBar = '<li onclick="startNew()">add new<i class="fa fa-plus"></i></li><li>&nbsp;</li>';
	$.each( flowData.flow, function( key, value ) {
		sideBar += '<li>'+value.flow_title+'</li>'+setSidebarList(value);
	});
	$('#existing-flow').html(sideBar);
	// console.log('sideBar', sideBar);
}



function setSidebarList(sideBarlist) {
	var sideList = '<ul>';
	$.each( sideBarlist.flow_content, function( key, value ) {
		sideList += '<li onclick="loadFlow('+value.flow_id+')">'+value.name+'</li>';
	});
	return sideList+'</ul>';
}
function handelCases(cases){
	switch (cases.flow.flow_type) {
		case 'TEXT':
			setText(cases.flow.text);
			break;
		case '1':
			itemAdd(dataValue, dataName);
			break;
		case '2':
			itemAdd(dataValue, dataName);
			break;
		case '3':
			itemAdd(dataValue, dataName);
			break;
		case '4':
			itemAdd(dataValue, dataName);
			break;
	}
}

function setText(){
		/*<li class="nav-item  active ">
			<a class="nav-link " href="" onclick="callFlow(1);">
			<i class="ni ni-tv-2 text-primary"></i> Dashboard
			</a>
		</li>*/
}
