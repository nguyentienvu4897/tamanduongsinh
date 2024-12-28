@extends('layouts.main')

@section('css')

@endsection

@section('title')
Chỉnh sửa bài viết
@endsection

@section('page_title')
Chỉnh sửa bài viết
@endsection

@section('content')
<div ng-controller="Post" ng-cloak>
  @include('admin.posts.form')
</div>
@endsection
@section('script')
@include('admin.posts.Post')
<script>
  app.controller('Post', function ($scope, $http) {
    $scope.form = new Post(@json($object), {scope: $scope});
    $scope.type = "{{ $type }}";
    console.log($scope.type);
    $scope.loading = {};

    $scope.submit = function(publish = 0) {
      $scope.loading.submit = true;
      let data = $scope.form.submit_data;
      data.append('publish', publish);
      $.ajax({
        type: 'POST',
        url: "/admin/posts/" + "{{ $object->id }}" + "/update",
        headers: {
          'X-CSRF-TOKEN': CSRF_TOKEN
        },
        data: data,
        processData: false,
        contentType: false,
        success: function(response) {
          if (response.success) {
            toastr.success(response.message);
            if (response.type == 'travel') window.location.href = "{{ route('Post.edit',1) }}?type=travel";
            else window.location.href = "{{ route('Post.index') }}";
          } else {
            toastr.warning(response.message);
            $scope.errors = response.errors;
          }
        },
        error: function(e) {
          toastr.error('Đã có lỗi xảy ra');
        },
        complete: function() {
          $scope.loading.submit = false;
          $scope.$applyAsync();
        }
      });
    }
  });
</script>
@endsection
