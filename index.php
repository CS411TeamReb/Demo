<?php
	include 'layout/header.php';
?>
	<table>
		<tr>
			<th>Show Name</th>
			<th>Description</th>
			<th>Year</th>
			<th>Type</th>
			<th>Criteria</th>
			<th>Voting Panel</th>
		</tr>
		<tr data-bind="foreach: awardShows">
			<td data-bind="text: ShowName"></td>
			<td data-bind="text: Description"></td>
			<td data-bind="text: Year"></td>
			<td data-bind="text: Type"></td>
			<td data-bind="text: Criteria"></td>
			<td data-bind="text: VotingPanel"></td>
		</tr>
	</table>
	<p>Value1</p>
	<input type="text" data-bind="value: value1"></input>
	<p>Value2</p>
	<input type="text" data-bind="value: value2"></input>
	<button data-bind="click: postToDB">Send</button>
<?php
	include 'layout/footer.php';
?>