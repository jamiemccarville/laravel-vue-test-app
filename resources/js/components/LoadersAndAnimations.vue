
<template>
  <div>
    <h1 class="mb-8 text-3xl font-normal leading-none text-grey-darkest">Loaders and Animations</h1>

    <p class="mb-10 leading-normal text-grey-darker">
      This spinner uses AirBnb's
      <a
        href="http://airbnb.io/lottie/#/web"
        class="font-bold text-blue"
      >Lottie</a>
      library to render its animation. You may download the necessary
      assets below.
    </p>

    <div class="flex items-center justify-center mb-8 border rounded-lg border-grey-lighter">
      <div ref="lottie" class="w-64" style="height: 457px"></div>
    </div>

    <a href="/laracasts-spinner.zip" class="button">spinner.zip</a>
  </div>
</template>

<script>
import lottie from "lottie-web";
export default {
  mounted() {
    lottie.loadAnimation({
      container: this.$refs.lottie,
      renderer: "svg",
      loop: true,
      autoplay: true,
      path: "/animations/spinner.json"
    });
  }
};
</script>

