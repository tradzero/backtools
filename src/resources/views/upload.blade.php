<script type="text/x-template" id="template-upload">
  <div class="col-sm-1 col-5-2">
    <div class="dropzone"
      style="border: 2px dashed rgba(0, 0, 0, 0.3);padding: 10px 0;text-align: center;">
      <img v-if="originImage"
        :src="baseUrl + image"
        style="max-width: 80%;">
      <span v-else
        class="control-label"
        v-text="placeholder"></span>
    </div>
  </div>
  <div class="col-sm-1 col-5-1">
    <button
      type="button"
      :ref="refButtonName"
      class="btn btn-info col-5-5"
      @click="clickButton">上传图片</button>
    <input id="poster-input" type="file"
      :ref="refInputName"
      @change="postUpload"
      style="display:none">
  </div>
</script>
