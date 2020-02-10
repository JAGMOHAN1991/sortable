import * as flowApi from './bot-flow/bot-flow-api';
var order = {};
flowApi.getAllFlow();
// fe : flow elements
var output = [];
var recursionId = 1;
// flowApi.getFlow();

sortable.create(gridDemo,{
            dragoverBubble: true,
            fallbackOnBody: true,
			group:{
				name: 'gridDemo',
				pull: 'clone', // To clone: set pull to 'clone'
				handle: '.handle'
			},
            onEnd: function (evt) {
                console.log('eeee', evt.item.dataset.id);
                if (evt.item.dataset.id == 5) {
                    createNested("nested-flow-"+(recursionId-1));
                }
            }
		}
	);

sortable.create(serialization1,{
        dragoverBubble: true,
        fallbackOnBody: true,
        direction: 'vertical',
		group: {
			name: 'serialization1',
			put: ['gridDemo']
		},
		onAdd: function (/**Event*/evt) {
			evt.item.className = '';
			evt.item.children[0].className = '';

			evt.item.innerHTML = changeDropUi(evt.item.dataset.id, evt.item.innerHTML);

			// console.log(evt.clone.innerHTML);
			// console.log(evt);
			// console.log(customSerialize());
		},
        /*onEnd: function (evt) {
            console.log('eeee', evt.item.dataset.id);
            if (evt.item.dataset.id == 5) {
                createNested("nested-flow-"+(recursionId-1));
            }
		},*/
        setData: function (dataTransfer, dragEl) {
			customSerialize()
			// console.log('serialize');
			// dataTransfer.setData('Text', dragEl.textContent);
		}
	}
);

function customSerialize() {
	var fe = $('#serialization1');
	output = []
	var fe,
		children = fe[0].children,
		i = 0,
		n = children.length;

	for (; i < n; i++) {
		// console.log('children',children);
		var dataId 		= children[i].dataset.id;
		var dataName 	= children[i].dataset.name;
		var dataValue 	= children[i].lastChild.value;
		itemAdd(dataValue, dataName);
		// console.log('dataName',dataName);
		// console.log('value',children[i].lastChild.value);
		/*switch (dataId) {
			case '0':
				itemAdd(dataValue, dataName);
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
		}*/
	}
	console.log('serialize', output);
	return order;
}

function itemAdd(dataValue, dataName){
	if (dataValue != undefined) {
		// console.log('pushing:', dataValue);
		var item = {}
		item [dataName] = dataValue;
		// item ["email"] = email;
		output.push(item);
		// output.push({dataName :dataValue});
	}
}

function changeDropUi(id, html) {
	switch (id) {
		case '0':
			html = "<input name='text' type='text' class='flow-answer' placeholder='enter'>";
			break;
		case '1':
			html += "<input name='text' type='text'>";
			break;
		case '2':
			html += "<input name='text' type='text'>";
			break;
		case '4':
			html += "<input name='text' type='text' class='flow-button' onkeyup='changeFlowName(this);' onclick='askForEntry(this)'>";
			break;
		case '5':
			html = "<textarea name='textarea' class='flow-textarea' onkeyup='changeFlowName(this);'></textarea>";
            html += '<ol class="nested-flow-textarea vertical" id="nested-flow-'+recursionId+'"></ol>';
			// createNested("flow-textarea");
            recursionId++;
        case '6':
            html = "";
			break;
	}
	return html;
}
function createNested(idName) {
    console.log('id',idName);
    sortable.create(idName,{
            group: {
                name: 'nested',
                put: ['nestedFlow']
            },
            onAdd: function (/**Event*/evt) {
                evt.item.className = '';
                evt.item.children[0].className = '';

                evt.item.innerHTML = changeDropUi(evt.item.dataset.id, evt.item.innerHTML);

                // console.log(evt.clone.innerHTML);
                // console.log(evt);
                // console.log(customSerialize());
            },
            setData: function (dataTransfer, dragEl) {
                customSerialize()
                // console.log('serialize');
                // dataTransfer.setData('Text', dragEl.textContent);
            }
        });

}





