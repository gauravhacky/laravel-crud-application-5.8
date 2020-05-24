<style>
.footer {
   position: fixed;
   left: 0;
   bottom: 0;
   width: 100%;
   background-color:#333;;
   color: white;
   text-align: center;
}
</style>
</head>
<body>
<div class="footer">
  <p>&copy; 2020 CrudApplication | HackoBlogs</p>
</div>
<script type="text/javascript" src="{{ URL::asset('js/jquery.min.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('js/validationscript.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('js/datatable.js') }}"></script>
@yield('js')