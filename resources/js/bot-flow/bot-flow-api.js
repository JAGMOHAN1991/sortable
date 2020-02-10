// callFlow();
import * as manageFlow from './bot-elements';
export const getAllFlow = callFlow => {
	axios.get('/public/json/flow-list.json')
		.then(function (response) {
			// handle success
			manageFlow.setFlowSidebar(response.data);
			// return response.data;
		})
		.catch(function (error) {
			// handle error
			console.log('error',error);
		})
		.then(function () {
			console.log('always');
		});
}

export const getFlow = callFlow => {
	axios.get('/json/flow.json')
		.then(function (response) {
			// handle success
			console.log('response',response.data);
			manageFlow.setFlowSidebar(response.data);
			// return response.data;
		})
		.catch(function (error) {
			// handle error
			console.log('error',error);
		})
		.then(function () {
			console.log('always');
		});
}
