<!-- S3 测试模板 -->
<image-upload
    type="s3"
    album="/"
    origin-image=""
    category="test"
    placeholder="请上传封面"
    base-url="{{config('backtool.s3.url')}}"
    presigned-url="{{route('backtool.s3.presigned')}}"
    @success="(url) => doSometing(url)">
</image-upload>
