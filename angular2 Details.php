Databinding Methods

String Interpolation

	{{ Expression resolving to a string}}
	
Property Binding
	
	<button [disabled] = "Expression resolving to required value type">
	
Event Binding

	<button (click) = "Expression handling the event">
	
Two-Way Binding

	<input [(ngModel)]="bound model (e.g. object)">
	


Lifecycle Hooks
1	ngOnChanges		Before #2 and when data-bound property value change
2	ngOnInit		On component initialization, after first ngOnChanges
3	ngDoCheck		During every Angular 2 change detection cycle
4	ngAfterContentInit		After inserting content (<ng-content>)
5	ngAfterContentChecked	After every check of inserted content
6	ngAfterViewInit			After initialize the component's views/child views
7	ngAfterViewChecked		Ater every check of the component's views/child views
8	ngOnDestroy		Just before Angular 2 destroys the directive/component