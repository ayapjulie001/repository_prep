<html>
    <head>
        <title>Sample Front End</title>

        @foreach($scripts as $script)
        <script type="text/javascript" src="<% $script %>"></script>
        @endforeach

        @foreach($styles as $style)
        <link rel="stylesheet" href="<% $style %>"/>
        @endforeach
    </head>
    <body ng-app="sample" ng-controller="SampleController" ng-init="setItems()">
        <hr/>
        {{ "The first row is select ? " + alertGridOptions.data[0].isSelected }}
        <hr/>
        <div class="grid"
             ui-grid="alertGridOptions"
             ui-grid-auto-resize
             ui-grid-edit
             ui-grid-resize-columns
             ui-grid-cellNav
             ui-grid-selection
             external-scopes="myViewModel"></div>
    </body>
</html>