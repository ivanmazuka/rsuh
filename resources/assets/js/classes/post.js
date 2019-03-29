export default class Post {
  constructor(id, title, body, picture, created_at, updated_at) {
    this.id = id;
    this.title = title;
    this.body = body;
    this.picture = picture;
    this.created_at = created_at;
    this.updated_at = updated_at;
  }
}