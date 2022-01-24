from TikTokApi import TikTokApi
from __init__ import Stat, db
from datetime import datetime, timedelta


def calculate(user):
    try:
        temp = TikTokApi.get_instance().get_user(username=user)
        userid = temp['uniqueId']

        query = db.session.query(Stat).filter(Stat.username == userid).first()
        if query:
            if (datetime.now() - query.date).days < 1:
                data = dict(username=str(query.username), avatar=str(query.avatar), totalSubs=str(query.subs),
                            totalLikes=str(query.likes), totalVideos=str(query.videos), totalLiked=str(query.liked),
                            totalViews=str(query.views), engagement=str(query.engagement),
                            low_income=str(query.income_low), high_income=str(query.income_high),
                            rating=str(query.rating))

                return data
        else:
            secuid = temp['secUid']
            result = TikTokApi.get_instance().user_posts(userID=userid, secUID=secuid, page_size=30, cursor=0)

            username = result[0].get("author").get("uniqueId")
            bio = result[0].get("author").get("signature")
            avatar = result[0].get("author").get("avatarMedium")
            totalSubs = result[0].get("authorStats").get("followerCount")
            totalLikes = result[0].get("authorStats").get("heartCount")
            totalVideos = result[0].get("authorStats").get("videoCount")
            totalLiked = result[0].get("authorStats").get("diggCount")

            avgViews = 0
            views = 0
            comments = 0
            shares = 0
            amt = len(result)

            for tiktok in result:
                views += tiktok.get("stats").get("playCount")
                comments += tiktok.get("stats").get("commentCount")
                shares += tiktok.get("stats").get("shareCount")

            avgViews = views / amt
            totalViews = 0
            totalComments = 0
            totalShares = 0

            if amt != 30:
                totalViews = views
                totalComments = comments
                totalShares = shares
            else:
                totalViews = round(avgViews * totalVideos)
                totalComments = round(comments / amt * totalVideos)
                totalShares = round(shares / amt * totalVideos)

            engagement = (totalLikes + totalComments + totalShares) / totalViews

            engRating = engagement
            avsRating = avgViews / totalSubs
            tsRating = totalSubs

            engagement = "{:.1%}".format(engagement)

            low_ecpm = 1.53
            high_ecpm = 5.92
            low_income = "{:,}".format(round(avgViews / 1000 * low_ecpm * 70))
            high_income = "{:,}".format(round(avgViews / 1000 * high_ecpm * 70))

            # region formatting numbers
            if totalSubs >= 1000000000:
                totalSubs = str("{:.1f}".format(totalSubs / 1000000000) + "B")
            elif totalSubs >= 1000000:
                totalSubs = str("{:.1f}".format(totalSubs / 1000000) + "M")
            elif totalSubs >= 1000:
                totalSubs = str("{:.1f}".format(totalSubs / 1000) + "K")
            else:
                totalSubs = str(totalSubs)

            if totalLikes >= 1000000000:
                totalLikes = str("{:.1f}".format(totalLikes / 1000000000) + "B")
            elif totalLikes >= 1000000:
                totalLikes = str("{:.1f}".format(totalLikes / 1000000) + "M")
            elif totalLikes >= 1000:
                totalLikes = str("{:.1f}".format(totalLikes / 1000) + "K")
            else:
                totalLikes = str(totalLikes)

            if totalLiked >= 1000000000:
                totalLiked = str("{:.1f}".format(totalLiked / 1000000000) + "B")
            elif totalLiked >= 1000000:
                totalLiked = str("{:.1f}".format(totalLiked / 1000000) + "M")
            elif totalLiked >= 1000:
                totalLiked = str("{:.1f}".format(totalLiked / 1000) + "K")
            else:
                totalLiked = str(totalLiked)

            if totalViews >= 1000000000:
                totalViews = str("{:.1f}".format(totalViews / 1000000000) + "B")
            elif totalViews >= 1000000:
                totalViews = str("{:.1f}".format(totalViews / 1000000) + "M")
            elif totalViews >= 1000:
                totalViews = str("{:.1f}".format(totalViews / 1000) + "K")
            else:
                totalViews = str(totalViews)

            if totalComments >= 1000000000:
                totalComments = str("{:.1f}".format(totalComments / 1000000000) + "B")
            elif totalComments >= 1000000:
                totalComments = str("{:.1f}".format(totalComments / 1000000) + "M")
            elif totalComments >= 1000:
                totalComments = str("{:.1f}".format(totalComments / 1000) + "K")
            else:
                totalComments = str(totalComments)

            if totalShares >= 1000000000:
                totalShares = str("{:.1f}".format(totalShares / 1000000000) + "B")
            elif totalShares >= 1000000:
                totalShares = str("{:.1f}".format(totalShares / 1000000) + "M")
            elif totalShares >= 1000:
                totalShares = str("{:.1f}".format(totalShares / 1000) + "K")
            else:
                totalShares = str(totalShares)

            # endregion

            # region rating
            def avgViewsToSubsRating(value):
                if value < 0.02:
                    return 0
                if 0.02 <= value < 0.03:
                    return 1
                if 0.03 <= value < 0.04:
                    return 2
                if 0.04 <= value < 0.05:
                    return 3
                if 0.05 <= value < 0.06:
                    return 4
                if 0.06 <= value < 0.07:
                    return 5
                if 0.07 <= value < 0.08:
                    return 6
                if 0.08 <= value < 0.09:
                    return 7
                if 0.09 <= value < 0.1:
                    return 8
                if 0.1 <= value < 0.12:
                    return 9
                if 0.12 <= value < 0.14:
                    return 10
                if 0.14 <= value < 0.16:
                    return 11
                if 0.16 <= value < 0.2:
                    return 12
                if 0.2 <= value < 0.25:
                    return 13
                if 0.25 <= value < 0.3:
                    return 14
                if 0.3 <= value < 0.35:
                    return 15
                if 0.35 <= value < 0.4:
                    return 16
                if 0.4 <= value < 0.45:
                    return 17
                if 0.45 <= value < 0.5:
                    return 18
                if 0.5 <= value < 1:
                    return 19
                if 1 <= value:
                    return 20
                return 0

            def totalSubsRating(value):
                if value < 50:
                    return 0
                if 50 <= value < 100:
                    return 1
                if 100 <= value < 250:
                    return 2
                if 250 <= value < 500:
                    return 3
                if 500 <= value < 750:
                    return 4
                if 750 <= value < 1000:
                    return 5
                if 1000 <= value < 2500:
                    return 6
                if 2500 <= value < 5000:
                    return 7
                if 5000 <= value < 10000:
                    return 8
                if 10000 <= value < 20000:
                    return 9
                if 20000 <= value < 50000:
                    return 10
                if 50000 <= value < 100000:
                    return 11
                if 100000 <= value < 200000:
                    return 12
                if 200000 <= value < 300000:
                    return 13
                if 300000 <= value < 500000:
                    return 14
                if 500000 <= value < 750000:
                    return 15
                if 750000 <= value < 1000000:
                    return 16
                if 1000000 <= value < 2500000:
                    return 17
                if 2500000 <= value < 5000000:
                    return 18
                if 5000000 <= value < 10000000:
                    return 19
                if 10000000 <= value:
                    return 20
                return 0

            def engagementRating(value):
                if value < 0.01:
                    return 0
                if 0.01 <= value < 0.02:
                    return 1
                if 0.02 <= value < 0.03:
                    return 2
                if 0.03 <= value < 0.04:
                    return 3
                if 0.04 <= value < 0.05:
                    return 4
                if 0.05 <= value < 0.06:
                    return 5
                if 0.06 <= value < 0.07:
                    return 6
                if 0.07 <= value < 0.08:
                    return 7
                if 0.08 <= value < 0.09:
                    return 8
                if 0.09 <= value < 0.1:
                    return 9
                if 0.1 <= value < 0.11:
                    return 10
                if 0.11 <= value < 0.12:
                    return 11
                if 0.12 <= value < 0.13:
                    return 12
                if 0.13 <= value < 0.14:
                    return 13
                if 0.14 <= value < 0.15:
                    return 14
                if 0.15 <= value < 0.16:
                    return 15
                if 0.16 <= value < 0.17:
                    return 16
                if 0.17 <= value < 0.18:
                    return 17
                if 0.18 <= value < 0.19:
                    return 18
                if 0.19 <= value < 0.2:
                    return 19
                if 0.2 <= value:
                    return 20
                return 0

            rating = avgViewsToSubsRating(avsRating) + totalSubsRating(tsRating) * 2 + engagementRating(engRating) * 2
            # endregion

            stat = Stat(username=str(username), avatar=str(avatar), subs=totalSubs,
                        likes=totalLikes, views=totalViews, videos=totalVideos,
                        liked=totalLiked, engagement=str(engagement), income_low=str(low_income),
                        income_high=str(high_income), rating=str(rating), date=datetime.now())
            try:
                db.session.add(stat)
                db.session.commit()
            except Exception as fuck:
                print("Unable to add stat to Stat DB: " + str(fuck))

            data = dict(username=str(username), bio=str(bio), avatar=str(avatar), totalSubs=totalSubs,
                        totalLikes=totalLikes, totalVideos=totalVideos, totalLiked=totalLiked,
                        totalViews=totalViews, totalComments=totalComments, totalShares=totalShares,
                        engagement=str(engagement), low_income=str(low_income), high_income=str(high_income),
                        rating=str(rating), amt=str(amt))

            return data

    except Exception as exc:
        return exc
