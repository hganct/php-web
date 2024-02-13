export function test() {
  $.get("ajax/account/index.php", function (response) {
    response.map((item) => console.log(item["email"]));
  });
}
