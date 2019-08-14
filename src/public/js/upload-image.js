Vue.component('image-upload', {
    template: '#template-upload',
    props: [
      'type',
      'album',
      'category',
      'placeholder',
      'token',
      'baseUrl',
      'originImage',
      'presignedUrl',
      'qiniuSignedUrl',
      'inputName'
    ],
    data: function () {
      return {
        name: '',
        image: '',
        refButtonName: '',
        refInputName: '',
      };
    },
    created: function() {
      this.image = this.originImage;
      this.name = this.inputName;
      this.refButtonName = uuid.v4();
      this.refInputName = uuid.v4();
    },
    methods: {
      clickButton: function () {
        this.$refs[this.refInputName].click();
      },
      getImageFileParams: function (file) {
        var type = file.type;
        var category = this.category;
        var extension = (/[/]/.exec(type)) ? /[^/]+$/.exec(type) : false;
  
        if (extension) {
          if (['png', 'jpg', 'jpeg', 'gif'].indexOf(extension[0].toLowerCase()) >= 0) {
            return category + '/' + category + '_' + uuid.v4() + '.' + extension;
          }
        }
  
        return category + '/' + category + '_' + uuid.v4();
      },
      changeInput: function () {
        var file = event.target.files[0];
        var filename = this.getImageFileParams(file);
        switch(this.type) {
          case 's3': this.s3Upload(file, filename); break;
          case 'qiniu': this.qiniuUpload(file, filename); break;
          default: alert('上传类型错误');
        }
      },
      s3Upload: function (file, filename) {
        var self = this;
        var url = axios.get(this.presignedUrl, { params: {
          filename: filename,
          filetype: file.type,
          album: self.album,
        }}).then(function (res) {
          var options = { headers: {'Content-Type': file.type }};
          var signedUrl =  res.data.data.signedUrl;
          return axios.put(signedUrl, file, options);
        }).then(function (result) {
          self.image = filename;
          self.$emit('success', filename);
        }).catch(function (err) {
          alert('上传失败');
        });
      },
      qiniuUpload: function (file, filename) {
        var self = this;
        axios.get(this.presignedUrl)
          .then(function (res) {
            var form = new FormData();
            form.append('file', file);
            form.append('key', filename);
            form.append('token', res.data.data.signedUrl);
            return axios.post(self.qiniuSignedUrl, form);
          }).then(function () {
            self.image = filename;
            self.$emit('success', filename);
          }).catch(function (err) {
            alert('上传失败');
          });
      }
    }
  });
  