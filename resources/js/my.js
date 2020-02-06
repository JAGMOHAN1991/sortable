/*
var group = $("ol.serialization").sortable({
   group: 'serialization',
   delay: 500,
   onDrop: function ($item, container, _super) {
       var data = group.sortable("serialize").get();

       var jsonString = JSON.stringify(data, null, ' ');

       console.log(jsonString);
       // $('#serialize_output2').text(jsonString);
       _super($item, container);
   }
});*/

// console.log($('.serialization'));
sortable.create(elementsGrid,
{
    group:{
				name: 'elements-grid',
				pull: 'clone', // To clone: set pull to 'clone'
				handle: '.handle'
			}
		}
);
sortable.create(
    serialization1,
{
			group: {
				name: 'serialization1',
				put: ['elements-grid']
			},
			onAdd: function (/**Event*/evt) {
				// evt.target.innerHTML = evt.clone.innerHTML + 'hiiii';
				console.log(evt.clone.innerHTML);
				console.log(evt);
			},
			/*setData: function (dataTransfer, dragEl) {
				console.log('evt');
				dataTransfer.setData('Text', dragEl.textContent);
			}*/
		}
);
