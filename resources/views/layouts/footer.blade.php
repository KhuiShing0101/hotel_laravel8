          <!-- footer content -->
          <footer style="margin-top:auto">
            <div class="pull-right">
                Developed by Softguide Team
            </div>
            <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
    </div>
  </div>
  <!-- Custom Theme Scripts -->
  <script src="{{ URL::asset('assets/js/custom.js') }}"></script>

@if (session()->has('message'))
  <script>
    new Pnotify(
        {
            title:'Success',
            text: '{{session()->get("message")}}',
            type: 'success',
            styling: 'bootstrap3'
        }
    )
  </script>
@endif
@if(session()->has('err_message'))
  <script>
    new Pnotify(
        {
            title:'Error',
            text:'{{session()->get("err_message")}}',
            type: 'error',
            hide: false,
            styling: 'bootstrap3'
        }
    )
  </script>
@endif
</body>
</html>
