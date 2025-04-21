## 📦 プラグイン導入方法（GitHubからcloneする方法）

```bash
cd app/Plugin
git clone git@github.com:to19960425/order-inquiry-plugin.git
mv order-inquiry-plugin OrderInquiry
# (必要であれば)
# sudo chown -R www-data:www-data OrderInquiry
```
```bash
# インストール
bin/console eccube:plugin:install --code=OrderInquiry
# 有効化
bin/console eccube:plugin:enable --code=OrderInquiry
# 無効化
bin/console eccube:plugin:disable --code=OrderInquiry
# アンインストール
bin/console eccube:plugin:uninstall --code=OrderInquiry
# アンインストール + プラグインファイル削除
bin/console eccube:plugin:uninstall --code=OrderInquiry --uninstall-force=true
